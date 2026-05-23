function Calculate() {
  let Money = document.querySelector(".Money").value;
  let PriceBuy = document.querySelector(".PriceBuy").value;
  let PriceSell = document.querySelector(".PriceSell").value;
  let FeeBuy = document.querySelector(".FeeBuy").value;
  let FeeSell = document.querySelector(".FeeSell").value;
  // let CirculatingSupply = document.querySelector(".FeeSell").value;
  if (Money == "" || Money == 0 || PriceBuy == "" || PriceSell == "") {
    alert("Missing correct data");
    return;
  }

  // QUANTITY: number of coins
  let Quantity = Money / PriceBuy;
  Quantity = Math.round(Quantity * 100) / 100;

  //TOTAL
  let Total = Quantity * PriceSell;
  Total = Total.toFixed(2); //different way to get 2 decimals

  //DIFFERENCE
  let Difference = Total - Money - FeeBuy - FeeSell;
  checkValue(Difference); // this is to set the color would need to check if not a number
  Difference = Math.round(Difference * 100) / 100;

  //TAX
  let Tax = (Difference * 0.23).toFixed(2);
  let CompraTax = (+Money + +FeeBuy).toFixed(2);
  let VentaTax = (Total - FeeSell).toFixed(2);
  console.log(CompraTax + "/ " + VentaTax);

  //PERCENTAGE: % of return / change, will return
  let Porcentaje = ((PriceSell - PriceBuy) / PriceBuy) * 100;
  Porcentaje = Porcentaje.toFixed(2);
  let X = check(Porcentaje);

  //CIRCULATING SUPPLY
  let CirculatingSupply = val();

  //MARKET CAP price * all the coins. Calculated with the buy price and the sell price. Sell price can be established to check where it will go with a certain price.
  let MarketCapN = Math.round(CirculatingSupply * PriceBuy);
  let MarketCapF = Math.round(CirculatingSupply * PriceSell);

  document.querySelector(".Quantity").value = Quantity + " coins";
  document.querySelector(".Difference").value = Difference + " €";
  document.querySelector(".Total").value = Total + " €";
  document.querySelector(".Tax").value = Tax + " €";
  document.querySelector(".Porcentaje").value = X + "x / " + Porcentaje + "%";
  document.querySelector(".CircSupply").value = CirculatingSupply + "M coins";
  document.querySelector(".MarketCapN").value = MarketCapN + "M";
  document.querySelector(".MarketCapF").value = MarketCapF + "M";
  document.querySelector(".ToDeclare").value = CompraTax + " / " + VentaTax;
}

//To assign color to the letters of the field Difference
function checkValue(num) {
  if (num < 0) {
    document.querySelector(".Difference").style.color = "red";
  }
  if (num > 0) {
    document.querySelector(".Difference").style.color = "rgb(12, 161, 32)";
  }
}

function check(porc) {
  let x = (porc / 100).toFixed(2);
  return x;
}

//set the circulating supply value automatically in the field after selecting the coin in the select
function val() {
  let coinName = document.getElementById("coinz").value;
  let circSupply = document.querySelector(".CircSupply");
  let valueSupply = checkCirculatingSupply(coinName); // falta
  // circSupply.value = valueSupply;
  return valueSupply;
}

//To get the circulating supply of a crypto
function checkCirculatingSupply(coin) {
  let coinz = [
    ["btc", 21],
    ["eth", 116],
    ["eth", 116],
    ["ada", 32000],
    ["dot", 987],
    ["ros", 10000],
    ["one", 10000],
    ["uni", 611],
    ["sus", 127],
    ["sol", 297],
    ["fil", 1960],
    ["lit", 66],
    ["xmr", 18],
    ["kus", 8],
    ["grt", 4715],
    ["pol", 4715],
    ["shi", 10000],
    ["min", 1000],
    ["mask", 100],
    ["git", 100],
    ["zec", 18],
    ["btt", 990000000],
    ["run", 500],
    ["monr", 10],
    ["scr", 206],
    ["rdx", 100],
    ["sta", 1818],
  ];

  for (var i = 0; i < coinz.length; i++) {
    // console.log("++" + coinz[i][0]);
    if (coin == coinz[i][0]) {
      var supply = coinz[i][1];
      return supply;
    }
  }
}

//To empty fields of the form
function Clear(id) {
  let empty = "";
  // document.querySelector('.coinz').value = empty;
  // document.querySelector(".Money").value = empty;
  // document.querySelector(".PriceBuy").value = empty;
  // document.querySelector(".PriceSell").value = empty;
  document.querySelector(".FeeBuy").value = empty;
  document.querySelector(".FeeSell").value = empty;
  document.querySelector(".Quantity").value = empty;
  document.querySelector(".Total").value = empty;
  document.querySelector(".CircSupply").value = empty;
  document.querySelector(".Difference").value = empty;
  document.querySelector(".MarketCapN").value = empty;
  document.querySelector(".MarketCapF").value = empty;
  document.querySelector(".ToDeclare").value = empty;
  document.querySelector(".Tax").value = empty;
  document.querySelector(".Porcentaje").value = empty;
}
