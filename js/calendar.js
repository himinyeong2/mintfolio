
function setCalendar(what, yy,mm){
    //오늘의 년, 월 가져와야해
    var date = new Date();
    if(what=="today"){
        var year = date.getFullYear();
        var month = date.getMonth()+1;
    }
    else{
        var year=yy;
        var month=mm;
    }

    var weekArray = new Array("일","월","화","수","목","금","토");
    var lastDay = new Array(31,28,31,30,31,30,31,31,30,31,30,31);

    //오늘의 년, 월로 시작하는(1일) 요일을 찾아야해
    var startDate = new Date(year,month-1,1);
    // alert("Startdate=>"+weekArray[startDate.getDay()]);
    var startWeekName = weekArray[startDate.getDay()];

    //찾은 요일의 위치 이전에 빈 공간의 td를 만들어서 채운 후 첫날을 표시해야해
    var value=setFirstBlank(month, startWeekName, weekArray);

    //첫날의 마지막 요일(토요일)까지 일을 채우자

    // 그 다음엔 매주가 시작될떄마다 그 다음 week에 요일을 채우자!
    setAllCalendar(value, lastDay[month-1]);
}
function setEvent(){
    document.getElementById('id-postit');
                document.getElementById('id-postit').style.display="inline-block";
                document.getElementById('id-diary-date').innerHTML=this.getAttribute('id');
                document.getElementById('diary-text-area').value="";
                var data={
                    'id':this.getAttribute('id')
                };
                fetch('http://localhost/mintfolio/test.php',{
                    method:'POST',
                    headers:{
                        'Content-Type':'application/json'
                    },
                    body:JSON.stringify(data)
                })
                .then(res=>res.json())
                .then(res=>{
                    if(res=="NODATA"){//데이터가 없는 경우
                        document.getElementById('id-diary-save').removeAttribute("hidden");
                        document.getElementById('id-diary-edit').setAttribute("hidden","hidden");
                        document.getElementById('id-diary-delete').setAttribute("hidden","hidden");
                    }else{//데이터가 있는 경우
                        document.getElementById('diary-text-area').value=res['content'];
                        document.getElementById('id-diary-save').setAttribute("hidden","hidden");
                        document.getElementById('id-diary-edit').removeAttribute("hidden");
                        document.getElementById('id-diary-delete').removeAttribute("hidden");
                    }
                })
                .catch((err)=>{
                    console.error("에러:",err);
                })
                .finally(res=>{
                    
                });
}
function setAllCalendar(startDay,lastDay){
    var week = new Array('week-2','week-3','week-4','week-5','week-6');
    var htmlWeek = new Array();
    var weekIndex=0;
    var count=0;
    for(var i=0;i<5;i++){
        htmlWeek[i] = document.getElementById(week[i]);
    }
    for(var i=startDay+1;i<=lastDay;i++){
        var td = document.createElement('td');
        td.setAttribute("id",document.getElementById('current-year-month').innerHTML+"-"+i);
        td.innerHTML = i;
        td.addEventListener('click',setEvent);
        if(count==7){
            weekIndex++;
            count=0;
        }
        htmlWeek[weekIndex].appendChild(td);
        count++;
    }
}
function setFirstBlank(month, startWeekName, weekArray){
    //9월 , 화요일, 요일 배열
    // alert(month+"/"+startWeekName);
    var value;
    if(startWeekName=="일"){
        value=makeBlank(0);
    }else if(startWeekName=="월"){
        value= makeBlank(1);
    }else if(startWeekName=="화"){
        value= makeBlank(2);
    }else if(startWeekName=="수"){
        value=  makeBlank(3);
    }else if(startWeekName=="목"){
        value=  makeBlank(4);
    }else if(startWeekName=="금"){
        value= makeBlank(5);
    }else if(startWeekName=="토"){
        value=  makeBlank(6);
    }
    return value;
}

function makeBlank(n,k){
    var week1_tr = document.getElementById('week-1');
    // alert(n);
    var start=0;
    for(var i=1;i<=7;i++){
        var td = document.createElement('td');
        
        if(i>n){
            td.innerHTML=++start;
            td.setAttribute("id",document.getElementById('current-year-month').innerHTML+"-"+start);
            td.addEventListener('click',setEvent);
            
        }
        week1_tr.appendChild(td);
    }
    return start;
}
function removeCalendar(){
    var week = new Array('week-1','week-2','week-3','week-4','week-5','week-6');
    var htmlWeek = new Array();
    for(var i=0;i<6;i++){
        htmlWeek[i] = document.getElementById(week[i]);
        while(htmlWeek[i].hasChildNodes()){
            htmlWeek[i].removeChild(htmlWeek[i].firstChild);
        }
    }
    
}
document.getElementById('btn-diary-fold').addEventListener('click',function(){
    var postit = document.getElementById('id-postit');
    postit.style.display="none";
});
document.getElementById('prev').addEventListener('click', function () {
    var string = document.getElementById('current-year-month').innerHTML;
    var date = string.split('-');
    if (date[1] == 1) {
        var prevMonth = 12;
        var year = date[0] - 1
    } else {
        var prevMonth = date[1] - 1;
        var year = date[0];
    }
    document.getElementById('current-year-month').innerHTML = year + "-" + prevMonth;
    removeCalendar();
    setCalendar(null,year,prevMonth);
})
document.getElementById('next').addEventListener('click',function(){
    var string=document.getElementById('current-year-month').innerHTML;
    var date = string.split('-');
    if (date[1] == 12) {
        var nextMonth = 1;
        var year = date[0] - 1+2;
    } else {
        var nextMonth=date[1]-1+2;
        var year=date[0];
    }
    document.getElementById('current-year-month').innerHTML=year+"-"+nextMonth;
    removeCalendar();
    setCalendar(null,year,nextMonth);
});
setCalendar("today", null,null);