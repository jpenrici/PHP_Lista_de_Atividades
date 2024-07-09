<div>
    <div class="navbar">
        <a href="">
            <img src="../img/logo.svg" alt="WebCalc logo"></a>
        <a href="">Home</a>
        <a href="">About</a>
        <button class="btn">Dark</button>
    </div>
    <div>
        <h4>
            <?php
            date_default_timezone_set("America/Sao_Paulo");
            echo "Bem-Vindo!<br>Hoje, " . date("d/m/Y");
            ?>
        </h4>
    </div>
</div>
<hr class="colored">