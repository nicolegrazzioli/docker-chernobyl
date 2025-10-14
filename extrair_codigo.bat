@echo off
setlocal enabledelayedexpansion

REM Caminho até a pasta 'main' onde estão os arquivos
cd /d "C:\Users\aluno\Desktop\nicole\DEVOPS\chernobyl-all"

set "PASTA=."
set "ARQUIVO_SAIDA=cherno-codes.txt"

REM Apagar arquivo anterior, se existir
if exist "%ARQUIVO_SAIDA%" del "%ARQUIVO_SAIDA%"

REM Percorrer todos os arquivos na pasta e subpastas
for /R "%PASTA%" %%F in (*.php *.sql *.yml) do (
    echo - Endereço: %%F:>>"%ARQUIVO_SAIDA%"
    type "%%F" >>"%ARQUIVO_SAIDA%"
    echo.>>"%ARQUIVO_SAIDA%"
    echo.>>"%ARQUIVO_SAIDA%"
)

echo Finalizado. Arquivo gerado: %CD%\%ARQUIVO_SAIDA%
pause
