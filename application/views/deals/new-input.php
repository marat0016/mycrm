
<script>
    function addNewInput(type){
        //
        var input = '';
        input += '<div class="newInputClass">'
        input += '<p class="m-t"><span class="newInputTitle"><a href="#" onclick="editInputTitle(this);">Новое поле</a></span><a class="pull-right" href="#" onclick="removeNewInput(this);">[Х]</a></p>\n';
        if(type == 1){
            input += '<input type="text" class="form-control input-sm">';
        }else if(type == 2){
            input += '<input type="text" class="form-control input-sm" data-type="number">';
        }
        else if(type == 3){
            input += '<div class="checkbox i-checks"><label><input type="checkbox" value=""> <i></i></label></div>';
        }
        else if(type == 4){
            input += '<div id="variants">'
            input += '<div><input name="variant" type="text" class="form-control input-sm" placeholder="Вариант №1"></div>'
            input += '<div class="m-t-xs"><input name="variant" type="text" class="form-control input-sm" placeholder="Вариант №2"></div>';
            input += '<div id="newList"></div>';
            input += '<div class="m-t-xs" align="center">\n\
                        <a href="#" onclick="addNewChildList();">Добавить вариант</a>&nbsp;|&nbsp;\n\
                        <a href="#" onclick="saveNewChildList();">Сохранить</a>\n\
                    </div></div>'
        }
        input += '</div>';
        $("#newInput").before(input);
        //$("[name=addType]:first").attr('checked', true);
    }
    
    function saveNewChildList(){
        var ed = $("[name=variant]");
        var html = '<div class="btn-group">';
        html += '<button data-toggle="dropdown" class="btn btn-sm btn-default dropdown-toggle"> <span class="dropdown-label">Выберите...</span> <span class="caret"></span></button>';
        html += '<ul class="dropdown-menu dropdown-select">';
        $.each(ed, function(){
            html += '<li><a href="#"><input type="radio" name="d-s-r">' + $(this).val() + '</a></li>';
        });
        html += '</ul>';
        html += '</div>';
        $("#variants").html(html);
    }
    
    function addNewChildList(){
        $("#newList").before("<div class='input-group m-t-xs'><input name='variant' placeholder='' type='text' class='form-control input-sm' /><span class='input-group-addon'><a href='#' onclick='remNewChildList(this);'>Х</a></span></div>");
    }
    
    function remNewChildList(thisis){
        $(thisis).parents("div.input-group").remove();
    }
    
    function saveInputTitle(thisis){
        var text = $(thisis).parents("span.newInputTitle").find("input").val();
        $(thisis).parents("span.newInputTitle").html('<a href="#" onclick="editInputTitle(this);">' + text + '</a>');
    }   
    
    function editInputTitle(thisis){
        $(thisis).parents("span.newInputTitle").html("<div style='width: 250px;' class='input-group'><input value='" + $(thisis).text() + "' placeholder='Введите название поля' type='text' class='form-control input-sm' /><span class='input-group-addon'><a href='#' onclick='saveInputTitle(this);'>Save</a></span></div>")
    }

    function removeNewInput(thisis) { 
        if(confirm("Вы уверены что хотите удалить поле?"))
            $(thisis).parents("div.newInputClass").remove();
    }
</script>


<div id="newInput"></div>

<p class="m-t">
    <div class="btn-group">
      <button data-toggle="dropdown" class="btn btn-sm btn-default dropdown-toggle"> <span class="dropdown-label">Добавить поле</span> <span class="caret"></span> </button>
      <ul class="dropdown-menu dropdown-select">
        <li class="disabled"><a><input type="radio" name="addType" disabled="true" checked>Добавить поле</a></li>
        <li><a onclick="addNewInput(1);"><input type="radio" name="addType">Текст</a></li>
        <li><a onclick="addNewInput(2);"><input type="radio" name="addType">Число</a></li>
        <li><a onclick="addNewInput(3);"><input type="radio" name="addType">Флаг</a></li>
        <li><a onclick="addNewInput(4);"><input type="radio" name="addType">Список</a></li>
        <li><a onclick="addNewInput(5);"><input type="radio" name="addType">Мультисписок</a></li>
        <li><a onclick="addNewInput(6);"><input type="radio" name="addType">Дата</a></li>
        <li><a onclick="addNewInput(7);"><input type="radio" name="addType">Ссылка</a></li>
        <li><a onclick="addNewInput(8);"><input type="radio" name="addType">Переключатель</a></li>
      </ul>
    </div>
</p>
