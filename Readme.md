# Martinova školka

## Lesson 1: Práce s datumem a časem

Pro názornou představu jsme v situaci, kdy do systému dostáváme **datum a čas**
nějaké události a potřebujeme ho uložit do naší SQL databáze.

A protože nám toto datum příchází z externí aplikace (např. přes API), nemůžeme
si zvolit, v jakém formátu nám dorazí. V tomto případě je to `ISO-8601` a my datum
potřebujeme převést do formátu `ANSI` klasického pro SQL databázi.

## Zadání

Uprav [index.php](index.php), aby tento do vytvářeného souboru uložil datumy a časy
ve formátu ANSI, tedy např.: `2013-01-30T00:56:18+01:00` se převede na `2013-01-30 00:56:18`.

V souboru [dates.json](dates.json) jsou připravené datumy. Tento soubor neměň.