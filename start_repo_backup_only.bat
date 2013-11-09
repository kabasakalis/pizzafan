@echo off

rem -------------------------------------------------------------
rem  Start Repository and Add Remote Origin and Backup
rem -------------------------------------------------------------

@if not exist "%HOME%" @set HOME=%HOMEDRIVE%%HOMEPATH%
@if not exist "%HOME%" @set HOME=%USERPROFILE%

SET /P msg=Starting New Local Repository.Initial commit message:
SET /P backup=Enter Bitbucket backup  URL :

git init &
git add . &
git add README &
git commit -am "%msg%"  &
git remote add backup %backup% 

echo Done.
pause