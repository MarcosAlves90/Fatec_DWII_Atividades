@echo off
title Aula 01
color f1
::criar um método (função)
:início
cls
echo.
echo.
echo      (O              O)
echo ----------------------------
echo      Menu Principal
echo ----------------------------
echo (1) Executar o Excel
echo (2) Navegar na Web
echo (3) Conteudo Youtube
echo (G) Arquivos Diversos
echo (O) Organizar arquivos
echo (N) Nova Tela
echo (E) Encerrar Script
echo ----------------------------
set /p op=Digite uma opcao :3
if %op% equ 1 (goto:planilha)
if %op% equ 2 (goto:web)
if %op% equ 3 (goto:conteudo)
if /i %op% equ g (goto:gerar)
if /i %op% equ o (goto:organizar)
if /i %op% equ n (call tela2.bat)
if /i %op% equ e (exit) else  (
	echo.
	echo Opcao Invalida!
	echo.
	pause
	goto inicio)
	
:planilha
start excel.exe
goto inicio

:web
echo.
set /p site=Digite o endereco da pagina web :
start msedge.exe %site%
goto inicio

:conteudo
echo.
set /p busca=Digite o conteudo a ser pesquisado :
start chrome.exe https://www.youtube.com/results?search_query=%busca%
goto inicio

:gerar
echo.
set /p nome=Digite o nome do arquivo a ser gerado :
set /p qtde=Digite a quantidade de arquivos a ser gerado :
set /p tipo=Digite o tipo do arquivo a ser gerado :
for /L %%n in (1,1,%qtde%) do echo Fatec Mauá - DSM  > %nome%%%n.%tipo%
echo.
echo Arquivos gerados com sucesso!!
echo.
pause
goto inicio 