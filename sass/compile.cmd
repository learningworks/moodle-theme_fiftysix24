@ECHO OFF
SETLOCAL

SET sourcefile=moodle

sass -r susy %sourcefile%.scss:../style/%sourcefile%.css --style expanded --unix-newlines -E UTF-8 --cache-location %TEMP%\sass


ENDLOCAL
