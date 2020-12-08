@ECHO OFF
setlocal DISABLEDELAYEDEXPANSION
SET BIN_TARGET=%~dp0/../daux/daux.io/bin/daux
php "%BIN_TARGET%" %*
