$(document).ready(function() {    
    var loadCompaniesFunc = function() {
        $.ajax({
            type: 'POST',
            url: 'ajax/getCompanies.php'
        })
                .done(function(dataJSON) {
                    var company = "";
                    var company_select = "<option value='' disabled selected>Seleccione Empresa</option>";
                    var data = JSON.parse(dataJSON);
                    for (var i = 0; i < data.length; i++) {
                        company += '<tr><td>' + data[i].id + '</td><td>' + data[i].name + '</td><td>' + data[i].address + '</td><td>' + data[i].sector + '</td><td><button type="button" class="btn btn-primary ver_personas" data-toggle="modal" data-target="#userModal" value="' + data[i].id + '">Ver Personas</button></td></tr>';
                        company_select += '<option value=' + data[i].id + '>'+ data[i].name +'</option>';
                    }
                    $('#company_table tbody').html(company);
                    $('#company_id').html(company_select);                
                    $(".ver_personas").click(function() {
                        var company_id = $(this).val();
                        $.ajax({
                            type: 'POST',
                            url: 'ajax/getEmployees.php',
                            data: {"company_id" : company_id}
                        })
                        .done(function(employeesJSON) {                        
                            var employees = JSON.parse(employeesJSON);
                            var employees_list = "<ol>";
                            for (var i = 0; i < employees.length; i++) {
                                employees_list += '<li>' + employees[i].first_name + ' ' + employees[i].last_name + '</li>';
                            }
                            employees_list += "</ol>";
                            $('#userModal .modal-body').html(employees_list);                
                        }.bind(this));
                    });
                }.bind(this));
        };  
        loadCompaniesFunc();
        $("#add_employee").click(function() {
            var first_name = $('#first_name').val();
            var last_name = $('#last_name').val();
            var company_id = $('#company_id option:selected').val();
            var datos = {
                "first_name": first_name,
                "last_name": last_name,
                "company_id": company_id
            };
            $.ajax({
                type: 'POST',
                url: 'process/EmployeeProcessor.php',
                data: datos
            })
                .done(function(datosJSON) {
                    var respuesta = JSON.parse(datosJSON);                    
                    alert(respuesta.message);
                }.bind(this));
        });
        
        $("#add_company").click(function() {
            var name    = $('#name').val();
            var address = $('#address').val();
            var sector  = $('#sector').val();
            var datos = {
                "name": name,
                "address": address,
                "sector": sector
            };
            $.ajax({
                type: 'POST',
                url: 'process/CompanyProcessor.php',
                data: datos
            })
                .done(function(datosJSON) {
                    var respuesta = JSON.parse(datosJSON);
                    if (respuesta.success) {
                        loadCompaniesFunc();
                    }
                    alert(respuesta.message);
                }.bind(this));
        });  
    
});