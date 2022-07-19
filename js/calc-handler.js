const createElem = () => {
    priceCalc = document.getElementById('priceCalc');
    unitBlock = `<div style = 'position:relative'>
        <img class="price-bg" src="./img/spot-2.png" alt="">\n
        <img class="price-bg" src="./img/spot-1.png" alt="">\n
        <img class="price-bg" src="./img/spot-3.png" alt="">\n
        <img class="price-bg" src="./img/spot-1.png" alt="">\n
        <img class="price-bg" src="./img/spot-3.png" alt="">\n
        <img class="price-bg" src="./img/spot-1.png" alt="">\n
        <img class="price-bg" src="./img/spot-3.png" alt="">\n
        `
    serviceList.forEach((unit, i) => {
        
        subBlock = ""
        unit.sub.forEach((sub, k) => {
            subBlock = subBlock + `\n<div class="form-check" area-label = '${sub.namesub} стоимостью ${sub.value}'>
                <input tabindex="-1" class="form-check-input ${(sub.required)?"required":"" }" '${sub.namesub} стоимостью ${sub.value}' area-label = '${sub.namesub} стоимостью ${sub.value}' value = "${sub.value}" type="checkbox"  id="service-${i}-${k}" ${(sub.required)?"checked disabled":" "}>
                <label tabindex="-1" class="form-check-label" title ='${sub.namesub} стоимостью ${sub.value}' area-label = '${sub.namesub} стоимостью ${sub.value}' for="service-${i}-${k}" alt = 'Помогите!!!'> ${sub.namesub}
                </label><span class = "b1adge" >${sub.value.toLocaleString('ru')}</span>
            </div>`
        })
        unitBlock = unitBlock + `\n<div class="unit-service">
            <h2 area-label='${unit.name}'>${unit.name}</h2>\n
            ${subBlock}
        </div>`
    });
    priceCalc.innerHTML = unitBlock+`</div>`
}
const CallPrint = (strid) => {
    arrayChecked =
        `<table bordercolor = '#000' border = '1' style = 'margin:1cm;font-family: "Times New Roman", Times, serif; font-size:14px;'>\n
            <tr>
                <td colspan='2' style = "text-align: center; font-family: "Times New Roman", Times, serif; font-size:14px;">Выбранные услуги, оказываемые отделениями сестринского ухода в АНО «Опека»</td>
            </tr>\n
            <tr>
                <td style="text-align:center;font-family: "Times New Roman", Times, serif; font-size:14px">Услуга</td><td style="text-align:center;font-family: "Times New Roman", Times, serif; font-size:14px">Цена</td>`;
    document.querySelectorAll('.form-check-input:checked').forEach(e => {

        
        let label = document.querySelector(`[for="${e.id}"]`);
        values = Number(e.value)
        blockTable =
            `<tr><td bordercolor = '#000' border = '1' style='font-family: Times New Roman, Times, serif; font-size:14px'>${label.outerText.replace(e.value, '')}</td><td border = '0' style = "text-align:right; width:2.8cm; font-family: Times New Roman, Times, serif; font-size:14px">${values.toLocaleString('ru')} руб.</td></tr>`
        arrayChecked = arrayChecked + '\n' + blockTable
    });
    arrayChecked = arrayChecked +
        `\n<tr>\n<td cellspacing = '0' colspan='2' style = "font-family: "Times New Roman", Times, serif; font-size:14px">${document.getElementById('result-length').outerHTML}</td>\n<tr>\n
            <tr>\n
                <td colspan='1' cellspacing = '0' style = ";font-family: "Times New Roman", Times, serif; font-size:14px">${document.getElementById('result-money').outerText.replace(document.querySelector('#result-money>span').outerText+' руб.','')}</td>\n 
                <td colspan='1' cellspacing = '0' style = "text-align: center;font-family: "Times New Roman", Times, serif; font-size:14px">${document.querySelector('#result-money>span').outerText+' руб.'}</td>\n   </tr>\n</table>`
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
document.querySelector('#result-length>span').innerHTML = summElem()[1].toLocaleString('ru');
document.querySelector('#result-length>span').areaLabel=summElem()[1].toLocaleString('ru') + ' штук.'
document.querySelector('#result-money>span').innerHTML = (+summElem()[0]).toLocaleString("ru");
document.querySelector('#result-money>span').areaLabel=(+summElem()[0]).toLocaleString("ru") + ' рублей';
document.querySelectorAll('.form-check-input').forEach(e=>e.addEventListener('click', ()=>{
    document.querySelector('#result-length>span').innerHTML = summElem()[1];
    document.querySelector('#result-money>span').innerHTML = (+summElem()[0]).toLocaleString("ru");
}))

document.getElementById('#printBtn').addEventListener('click', CallPrint('priceCalc'))
