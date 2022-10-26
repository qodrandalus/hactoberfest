<script>
  let items = "";
  let todoLists = [
    {
      text: "Finish my projects",
      status: true,
    },
  ];

  function addToList() {
		todoLists = [...todoLists, {text: items, status: false}];
		items = '';
	}
</script>
