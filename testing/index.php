

<input type="text" id="test_data" placeholder="Test data...">
<button type="submit" id="btn">submit</button>
<hr>

<div id="getdata">

</div>


<script>

async  function add(){
    const data = document.getEelementById('test_data').value;
    await fetch('index.php', {
        method: "POST",
        body :JSON.stringify ({
            datax : data
        })
    })
}


async function get(){
    
    await fetch('testget.php')
    .then((res) => res.json())
    .then((response) =>{
        let output = '';
        for (let i in response){
        }

    })
}
        



</script>