<html>
<head>
    <script src="jquery-3.1.0.min.js"></script>
    <script>
        $(document).ready(function () {
            $("select[name='country']").bind("change", function () {
                $("select[name='city']").empty();
                $.get("check.php", {country:$("select[name='country']").val()}, function (data) {
                    data = JSON.parse(data);
                    for(var id in data){
                        $("select[name='city']").append($("<option value='"+id+"'>"+data[id]+"</option>"));
                    }
                });
            });
        });
    </script>
</head>
<body>
<label>Select country</label>
<select name="country">
    <option value="0" selected="selected"></option>
    <option value="1" >USA</option>
    <option value="2" >France</option>
</select>
<br>
<label>Cities</label>
<select name="city">
    <option value="0"></option>
</select>
</body>
</html>