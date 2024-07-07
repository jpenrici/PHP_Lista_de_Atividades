# Atividade Calculadora

Está atividade tem o objetivo de reunir grande parte do aprendizado do curso.

**Leia com atenção este guia!**

- Evite ao máximo o uso de chatbots inteligentes, assistentes de código ou copiar soluções prontas.
- Desafie-se primeiro, utilize a documentação oficial quando possível.

**Bons estudos!**

## Cenário

A JWC está desenvolvendo um "Website Calculadora PHP" e você deve desenvolver a estrutura, o código e os testes.
Mostre seu conhecimento de HTML, CSS, JavaScript e PHP para o recrutador!

## Etapas

1. Crie a hierarquia de pastas e arquivos abaixo:

```
   WebCalc
   |
   ├── css
   │   └──> inclua aqui seus arquivos CSS.
   ├── img
   │   └──> inclua aqui seus arquivos de imagem (SVG, PNG, JPG).
   ├── js
   │   └── theme.js ─> controlador de tema.
   ├── php
   │   ├── test
   │   |   └── test_calc.php ─> arquivo teste do calc.php.
   │   ├── calc.php          ─> arquivo "motor" de cálculos.
   │   ├── header.php        ─> arquivo de cabeçalho do webcalc.php.   
   │   ├── content.php       ─> arquivo de conteúdo do webcalc.php.
   │   └── footer.php        ─> arquivo de rodapé do webcalc.php.   
   ├── public
   |   └── webcalc.php       ─> arquivo principal.
   └── index.html            ─> arquivo de redirecionamento.
```

2. Desenvolva os códigos:

- index.html   : arquivo inicial para redirecionamento para "public/webcalc.php".
- webcalc.php  : arquivo com uma página HTML com o título "Web Calc PHP"
                 e chamada para os arquivos "header.php", "content.php",
                 "footer.php" usando o comando `require_once`.
- header.php   : layout superior da página com um navbar, menu ou saudação.
- content.php  : layout central com a calculadora.
- footer.php   : layout inferior para fechar a página.
- calc.php     : código em PHP que executa as quatro operações artiméticas.
- test_calc.php: código em PHP que testa o arquivo "calc.php".
- theme.js     : código em JavaScript para controlar "modo escuro/claro".

3. Exemplo de Código Teste:

```
<?php

require_once "../calc.php";

function test($firstNumber, $secondNumber, $operator) {
    $result = calc($firstNumber, $secondNumber, $operator);
    echo "calc($firstNumber, $secondNumber, $operator) = " . $result . PHP_EOL;
}

// Testes
test('10', '10', '+');
test('10', '10', '-');
test('10', '10', '*');
test('10',  '5', '/');
test('10',  '0', '/');
test('ab', '10', '+');
test('10', 'ab', '+');
test('',   '10', '+');
test('10',   '', '+');
test(' ',   ' ', '+');

echo "Teste finalizado!" . PHP_EOL;
```

4. Estilização Final

- Desenvolva arquivos CSS para estilizar a página.

5. Melhorias

- Inclua melhorias como saudações, data, hora e tudo mais que for atrativo.


## Referências

- [W3C](https://www.w3.org/) : O World Wide Web Consortium (W3C) é a principal organização de padronização da World Wide Web.
- [Mozilla](https://developer.mozilla.org/en-US/) : Documentação de tecnologias da web, incluindo CSS, HTML e JavaScript.
- [PHP](https://www.php.net/docs.php) : Documentação oficial.
- [SVG](https://www.w3.org/TR/SVG2/) : Documentação com detalhes e especificações do W3C.

- [W3Schools](https://www.w3schools.com/) : Site educacional voltado para o aprendizado de tecnologias web.