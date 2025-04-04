function filterTable() {
    var input, filter, table, tr, td, i, j, txtValue;
    input = document.getElementById("filterInput");
    filter = input.value.toUpperCase();
    table = document.getElementById("dataTable");
    tr = table.getElementsByTagName("tr");

    for (i = 1; i < tr.length; i++) {
        tr[i].style.display = "none";
        td = tr[i].getElementsByTagName("td");
        for (j = 0; j < td.length; j++) {
            if (td[j]) {
                txtValue = td[j].textContent || td[j].innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    tr[i].style.display = "";
                    break;
                }
            }
        }
    }
}

function addRow() {
    var table, row, cell1, cell2, cell3,cell4,cell5,cell6;
    table = document.getElementById("dataTable").getElementsByTagName('tbody')[0];
    row = table.insertRow(table.rows.length);
    cell1 = row.insertCell(0);
    cell2 = row.insertCell(1);
    cell3 = row.insertCell(2);
    cell4 = row.insertCell(3);
    cell5 = row.insertCell(4);
    cell6 = row.insertCell(5);
    cell1.innerHTML = "<input type='text' placeholder='Year'>";
    cell2.innerHTML = "<input type='text' placeholder='Name_of_std'>";
    cell3.innerHTML = "<input type='text' placeholder='Reg_no'>";
    cell4.innerHTML = "<input type='text' placeholder='Program'>";
    cell5.innerHTML = "<input type='text' placeholder='Company'>";
    cell6.innerHTML = "<input type='text' placeholder='CTC'>";
}