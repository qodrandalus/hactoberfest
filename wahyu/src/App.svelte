<script>
  let items = "";
  let todoLists = [
    {
      text: "Finish my projects",
      status: true,
    },
  ];

  function addToList() {
    todoLists = [...todoLists, { text: items, status: false }];
    items = "";
  }

  function removeFromList(index) {
    todoLists.splice(index, 1);
    todoLists = todoLists;
  }
</script>

<input bind:value={items} type="text" placeholder="new todo item..">
<button on:click={addToList}>Add</button>

<br/>
{#each todoLists as item, index}
	<input bind:checked={item.status} type="checkbox">
	<span class:checked={item.status}>{item.text}</span>
	<span on:click={() => removeFromList(index)}>❌</span>
	<br/>
{/each} 

<style> 
	.checked {
        text-decoration: line-through;
    }
</style> 