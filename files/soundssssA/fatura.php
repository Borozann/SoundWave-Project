<!DOCTYPE html>
<html>
<head>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }

        .container-data-left {

            padding: 8px;
            text-align: left;
        } 
        .container-data-end {

padding: 8px;
text-align: right;
}

        .sub-title-container {
            background-color: #f2f2f2;
        }
       

        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            background-color: #ffab04;
        }

        .container-fatura {
            background-color: white;
            border-radius: 10px;
            width: 100%;
            margin: 0 auto;
            max-width: 800px;
            padding:  40px;

        }

        .name-logo {
            font-size: 40px;
            font-weight: bold;
            color: #ffab04;
        }
    </style>
</head>

<body>

<br><br><br><br><br>
    <div class="container-fatura">

       
        <div style="display: flex; align-items: center; justify-content: center; text-align: center; margin-bottom:40px">
            <div style="width: 100%;  text-align: left; ">
                <p class="name-logo" style="margin: 5px 0;">SoundWave</p>
                <p  style="margin: 5px 0;">A melhor loja de equipamentos de som</p>          
                </div>
            <div style="width: 100%;  text-align: right;">
                <p  style="margin: 5px 0;">Endereço da Empresa</p>
                <p style="margin: 5px 0;">Telefone da Empresa</p>
                <p style="margin: 5px 0;">Email da Empresa</p>
            </div>
        </div>


        <div style="margin: 5px 0; font-weight: bold; font-size:25px">fatura #00001</div>
        <div style="border: 1px black solid " style="width: 100%"></div>  

        <div style="display: flex; align-items: center; justify-content: center; text-align: center; "class="sub-title-container">
        <div style="width: 100%;" >
                <p class="container-data-left "style="margin: 5px 0; font-weight: bold; font-size:20px">Produto</p>
            </div>
            <div style="width: 100%;">
                <p class="container-data-left "style="margin: 5px 0; margin-left: 35px;font-weight: bold; font-size:20px">Quantidade</p>
            </div>
            <div style="width: 100%;">
                <p class="container-data-end " style="margin: 5px 0; font-weight: bold; margin-right: 35px;font-size:20px">Preço</p>
            </div>
            <div style="width: 100%;">
                <p class="container-data-end"style="margin: 5px 0; font-weight: bold; font-size:20px">Subtotal</p>
            </div>
</div>
<div style="border: 1px black solid;  "></div>     

<div style="display: flex; align-items: center; justify-content: center; text-align: center; ">
        <div style="width: 100%;" >
                <p class="container-data-left"style="margin: 5px 0;">produto 1</p>
            </div>
            <div style="width: 100%;">
                <p class="container-data-left"style="margin: 5px 0;margin-left: 45px;">01</p>
            </div>
            <div style="width: 100%;">
                <p class="container-data-end" style="margin: 5px 0;margin-right: 35px;">500,00€</p>
            </div>
            <div style="width: 100%;">
                <p class="container-data-end"style="margin: 5px 0;">500,00€</p>
            </div>
</div>


<div style="display: flex; align-items: center; justify-content: center; text-align: center; ">
        <div style="width: 100%;" >
                <p class="container-data-left"style="margin: 5px 0;">produto 2</p>
            </div>
            <div style="width: 100%;">
                <p class="container-data-left"style="margin: 5px 0;margin-left: 45px;">01</p>
            </div>
            <div style="width: 100%;">
                <p class="container-data-end" style="margin: 5px 0;margin-right: 35px;">160,99€</p>
            </div>
            <div style="width: 100%;">
                <p class="container-data-end"style="margin: 5px 0;">160,99€</p>
 </div>
 </div>


 <div style="border: 1px black solid"></div> 

 <div style="display: flex; align-items: center; justify-content: center; text-align: center; ">
        <div style="width: 100%;" >
                <p class="container-data-left"style="margin: 5px 0;"></p>
            </div>
            <div style="width: 100%;">
                <p class="container-data-left"style="margin: 5px 0;"></p>
            </div>
            <div style="width: 100%;">
                <p class="container-data-end" style="margin: 5px 0; margin-right: 35px; font-weight: bold;">Subtotal</p>
            </div>
            <div style="width: 100%;">
                <p class="container-data-end"style="margin: 5px 0;">160,99€</p>
 </div>
 </div>
 <div style="display: flex; align-items: center; justify-content: center; text-align: center; ">
        <div style="width: 100%;" >
                <p class="container-data-left"style="margin: 5px 0;"></p>
            </div>
            <div style="width: 100%;">
                <p class="container-left"style="margin: 5px 0;"></p>
            </div>
            <div style="width: 100%;">
                <p class="container-data-end" style="margin: 5px 0;margin-right: 35px;  font-weight: bold;">IVA:</p>
            </div>
            <div style="width: 100%;">
                <p class="container-data-end"style="margin: 5px 0;">23%</p>
 </div>
 </div>
 
<div style="display: flex; align-items: center; justify-content: center; text-align: center; ">
        <div style="width: 100%;" >
                <p class="container-data-left"style="margin: 5px 0;"></p>
            </div>
            <div style="width: 100%;">
                <p class="container-left"style="margin: 5px 0;"></p>
            </div>
            <div style="width: 100%;">
                <p class="container-data-end" style="margin: 5px 0;margin-right: 35px;  font-weight: bold;">Total:</p>
            </div>
            <div style="width: 100%;">
                <p class="container-data-end"style="margin: 5px 0;">321312312€</p>
 </div>
 </div>

<br><br><br><br><br>
 <div class="container-end"> <div style="width: 100%;  text-align: left; ">
                <p class="" style="margin: 5px 0;font-weight: bold; font-size:15px">Donos: Diogo Silva & Gabriel Borozan</p>
                <p  style="margin: 5px 0;font-weight: bold; font-size:15px">Conta: 321321312-32</p>          
                </div></div>
    </div>
</body>

</html>