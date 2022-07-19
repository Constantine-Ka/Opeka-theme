var payment=false;


document.getElementById("ip").addEventListener("click", ()=>{
	document.getElementById("payment").classList.remove("active");
	var payment=false;
	document.getElementById("ip").classList.add("active");
	createElem(payment);
    document.querySelector('#result-length>span').innerHTML = summElem()[1];
    document.querySelector('#result-money>span').innerHTML = (+summElem()[0]);
    document.querySelectorAll('.form-check-input').forEach((e)=>{
        e.addEventListener("click", ()=>{
            document.querySelector('#result-length>span').innerHTML = summElem()[1];
            document.querySelector('#result-money>span').innerHTML = (+summElem()[0]);
        })
    })

});
document.getElementById("payment").addEventListener("click", ()=>{
	document.getElementById("ip").classList.remove("active");
	var payment=true;
	document.getElementById("payment").classList.add("active");
	createElem(payment);
    document.querySelector('#result-length>span').innerHTML = summElem()[1];
    document.querySelector('#result-money>span').innerHTML = (+summElem()[0]);
    document.querySelectorAll('.form-check-input').forEach((e)=>{
        e.addEventListener("click", ()=>{
            document.querySelector('#result-length>span').innerHTML = summElem()[1];
            document.querySelector('#result-money>span').innerHTML = (+summElem()[0]);
        })
    })

});

const createElem = (ispayment) => {
    priceCalc = document.getElementById('priceCalc');
    unitBlock=" ";

    serviceList.forEach((unit, i) => {
        subBlock = "";
        unit.sub.forEach((sub, k) => {
            value = (ispayment)?(sub.value*1.23)*1.1:sub.value;
            value= value.toFixed(2).toLocaleString('ru');
            // update=(sub.value*1.23)*1.1
            subBlock = subBlock + `\n<div class="form-check" area-label = '${sub.namesub} стоимостью ${sub.value}'>
                <input tabindex="-1" class="form-check-input ${(sub.required)?"required":"" }" '${sub.namesub} стоимостью ${sub.value}' area-label = '${sub.namesub} стоимостью ${value}' value = "${value}" type="checkbox"  id="service-${i}-${k}"  ${(sub.required)?"checked disabled":" "}>
                <label tabindex="-1" class="form-check-label" title ='${sub.namesub} стоимостью ${sub.value}' area-label = '${sub.namesub} стоимостью ${value}' for="service-${i}-${k}" > ${sub.namesub}
                </label><span class = "alert alert-primary" style="padding:2px" >${value}</span> 
            </div>`
        })
        unitBlock = unitBlock + `\n<div class="unit-service">
            <h2 area-label='${unit.name}'>${unit.name}</h2>\n
            ${subBlock}
            </div>`
        // console.log("🚀 ~ file: Untitled-3 ~ line 33 ~ serviceList.forEach ~ unitBlock", unitBlock)
        // initBlock2= `<td style="width:80%"></td>
    });
    priceCalc.innerHTML = unitBlock+`</div>`
}
const CallPrint = (strid) => {
    arrayChecked =
        `<table bordercolor = '#000' border = '1' style = 'margin:1cm;font-family: "Times New Roman", Times, serif; font-size:14px;'>\n
            <tr>
                <td colspan='2' style = "text-align: center; font-family: "Times New Roman", Times, serif; font-size:14px;">Выбранные услуги, оказываемые отделениями сестринского ухода в АНО «Опека» ${(payment)?"<u>на платной основе</u>":"<u>по индивидуальной программе</u>"}</td>
            </tr>\n
            <tr>
                <td style="text-align:center;font-family: "Times New Roman", Times, serif; font-size:14px">Услуга</td><td style="text-align:center;font-family: "Times New Roman", serif; font-size:14px">Цена</td>
            </tr>`;
    document.querySelectorAll('.form-check-input').forEach(elem=>{
        
        if(elem.checked){
            var label = document.querySelector(`[for="${elem.id}"]`);
            blockTable =
                `<tr><td bordercolor = '#000' border = '1' style='font-family: Times New Roman, Times, serif; font-size:14px'>${label.outerText.replace(e.value, '')}</td><td border = '0' style = "text-align:right; width:2.8cm; font-family: Times New Roman, Times, serif; font-size:14px">${elem.value.toLocaleString('ru')} руб.</td></tr>`
            arrayChecked = arrayChecked + '\n' + blockTable
        }

    });
        
                   
   
    resultMoney = +document.querySelector('#result-money>span').outerText;
    paymentSumm =((resultMoney*1.23)*1.1).toLocaleString('ru');
    arrayChecked = arrayChecked + `\n
        \n<tr>\n<td cellspacing = '0' colspan='2' style = "font-family: "Times New Roman", Times, serif; font-size:14px">${document.getElementById('result-length').outerHTML}</td>\n<tr>\n
            <tr>\n
                <td colspan='1' cellspacing = '0' style = ";font-family: "Times New Roman", Times, serif; font-size:14px">${document.getElementById('result-money').outerText.replace(document.querySelector('#result-money>span').outerText+' руб.','')}</td>\n 
                <td colspan='1' cellspacing = '0' style = "text-align: center;font-family: "Times New Roman", Times, serif; font-size:14px">${document.querySelector('#result-money>span').outerText+' руб.'}</td>\n 
                  
            </tr>\n
            </table>`;
    var WinPrint = window.open('', '',
        'left=50,top=50,width=800,height=640,toolbar=0,scrollbars=1,status=0');
    WinPrint.document.write('');
    WinPrint.document.write(arrayChecked);
    WinPrint.document.write('');
    WinPrint.document.close();
    WinPrint.focus();
    WinPrint.print();
    WinPrint.close();
}
if(document.getElementById('priceCalc')){createElem()}
const summElem = () => {
    summ = 0;
    arrayChecked = document.querySelectorAll('.form-check-input:checked')
    arrayChecked.forEach((element) => {
        e = +element.value
        summ = e + summ
    });
    result = [summ.toFixed(2), arrayChecked.length]
    return result
};
document.querySelector('#result-length>span').innerHTML = summElem()[1];
document.querySelector('#result-length>span').areaLabel=summElem()[1] + ' штук.'
document.querySelector('#result-money>span').innerHTML = (+summElem()[0]);
document.querySelector('#result-money>span').areaLabel=(+summElem()[0]) + ' рублей';
document.querySelectorAll('.form-check-input').forEach((e)=>{
    e.addEventListener("click", ()=>{
        document.querySelector('#result-length>span').innerHTML = summElem()[1];
        document.querySelector('#result-money>span').innerHTML = (+summElem()[0]);
    })
})
// $('.form-check-input').on('click', function () {

//     document.querySelector('#result-length>span').innerHTML = summElem()[1]
//     document.querySelector('#result-money>span').innerHTML = (+summElem()[0]);
// })
document.getElementById("printBtn").addEventListener('click',() => CallPrint('priceCalc'))
// $('#printBtn').on('click', () => CallPrint('priceCalc'))