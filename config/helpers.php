<?php

/**
 * @param ...$data
 * @return void
 */
function dd(...$data): void
{
    var_dump($data);
    die;
}

/**
 * @param ...$data
 * @return void
 */
function dump(...$data): void
{
    var_dump($data);
}

/**
 * @return bool
 */
function isUserLoggined(): bool
{
    return !!isset($_SESSION['user_id']);
}

/**
 * @return int
 */
function getUserLoginId(): int
{
    return intval($_SESSION['user_id'] ?? 0);
}

/**
 * @param string $location
 * @return void
 */
function redirect(string $location):void
{
    if (!headers_sent()) header("location:{$location}");
    else echo "<script>location.href = '{$location}'</script>";
    die();
}