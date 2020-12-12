var today = new Date();//오늘 날짜//내 컴퓨터 로컬을 기준으로 today에 Date 객체를 넣어줌
var date = new Date();//today의 Date를 세어주는 역할

function prevCalendar(json_data) {//이전 달
    today = new Date(today.getFullYear(), today.getMonth() - 1, today.getDate());
    buildCalendar(json_data); //달력 cell 만들어 출력 

}

function nextCalendar(json_data) {//다음 달
    today = new Date(today.getFullYear(), today.getMonth() + 1, today.getDate());
    buildCalendar(json_data);//달력 cell 만들어 출력
}

function buildCalendar(jsonData) {//현재 달 달력 만들기
    var doMonth = new Date(today.getFullYear(), today.getMonth(), 1);
    var lastDate = new Date(today.getFullYear(), today.getMonth() + 1, 0);
    var tbCalendar = document.getElementById("calendar");
    var tbCalendarYM = document.getElementById("tbCalendarYM");
    tbCalendarYM.innerHTML = today.getFullYear() + "년 " + (today.getMonth() + 1) + "월 달력";

    while (tbCalendar.rows.length > 2) {
        tbCalendar.deleteRow(tbCalendar.rows.length - 1);
    }
    var row = null;
    row = tbCalendar.insertRow();
    row.setAttribute("class","cal-tr");
    var cnt = 0;// count, 셀의 갯수를 세어주는 역할
    // 1일이 시작되는 칸을 맞추어 줌
    for (i = 0; i < doMonth.getDay(); i++) {
        cell = row.insertCell();//열 한칸한칸 계속 만들어주는 역할
        cnt = cnt + 1;//열의 갯수를 계속 다음으로 위치하게 해주는 역할
    }

    /*달력 출력*/
    for (i = 1; i <= lastDate.getDate(); i++) {
        //1일부터 마지막 일까지 돌림
        cell = row.insertCell();//열 한칸한칸 계속 만들어주는 역할
        cell.innerHTML = i;//셀을 1부터 마지막 day까지 HTML 문법에 넣어줌
        // cell.innerHTML =  cell.innerHTML +"<img style='position:absolute; right:0; top:0;' src='images/emo/smile.png'>";

        if(today.getMonth()+1>=1 && today.getMonth()+1<=9){
            month = "0"+(today.getMonth()+1);
        }else{
            month= today.getMonth()+1;
        }
        if(i>=1 && i<=9){
            day = "0"+i;
        }else{
            day=i;
        }
        cell.id = today.getFullYear() + "-" + month + "-" + day;
        cell.setAttribute("class", 'cal-td');
        addEvent(cell);

        cnt = cnt + 1;//열의 갯수를 계속 다음으로 위치하게 해주는 역할
        if (cnt % 7 == 0) {/* 1주일이 7일 이므로 토요일 구하기*/
            // cell.innerHTML = "<font color=skyblue>" + i;
            //7번째의 cell에만 색칠
            row = calendar.insertRow();
            row.setAttribute("class","cal-tr");
            
            //토요일 다음에 올 셀을 추가
        }
        /*오늘의 날짜에 노란색 칠하기*/
        if (today.getFullYear() == date.getFullYear()
            && today.getMonth() == date.getMonth()
            && i == date.getDate()) {
            //달력에 있는 년,달과 내 컴퓨터의 로컬 년,달이 같고, 일이 오늘의 일과 같으면
            cell.bgColor = "#FAF58C";//셀의 배경색을 노랑으로 
        }
        
    }
    add_emoticon(jsonData);
    
}
function add_emoticon(data) {
    for (var i = 0; i < data.length; i++) {

        if(document.getElementById(data[i]['date'])==null) continue;

        cur_td = document.getElementById(data[i]['date']);
        cur_td.innerHTML = cur_td.innerHTML + "<img style='position:absolute;top:20%; right:25%; width:80px; height:80px;' src='" + data[i]['path'] + "'>";
    }
}
