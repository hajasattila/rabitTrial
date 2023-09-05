<?php
// ErrorHandler.php
class ErrorHandler
{
    public static function logError($type, $message, $exception = null)
    {
        // Log the error with timestamp, type, message, and details
        $errorMessage = date('Y-m-d H:i:s') . " [$type] $message\n";

        if ($exception instanceof Exception) {
            $errorDetails = $exception->getMessage() . "\n" . $exception->getTraceAsString();
            $errorMessage .= "Details: " . $errorDetails . "\n";
        }

        //log the problem here
        file_put_contents('Error/Error_log.txt', $errorMessage, FILE_APPEND);
        exit;
    }
}
?>