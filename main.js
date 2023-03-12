

const todo = document.getElementById("todo-btn")
// const task = document.getElementById("task").value


async function addTodo(){
    const task = document.getElementById("task").value

    await fetch('add.php?type=todo', {
        method :"POST",
        body: JSON.stringify({
            data : task
        })
    })
    fetchTodo()
}


async function fetchTodo(){

    await fetch('get.php')
    .then((res) => res.json())
    .then((response) =>{
        let output = '';
        for (let i in response){
            
        }
    })
}

