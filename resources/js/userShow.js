
Livewire.on('close-modal', function() {
  // const $modalElement = document.querySelector('#crud-modal');
  // console.log($modalElement);
  initFlowbite();
  const modal = FlowbiteInstances.getInstance("Modal", "crud-modal");
  modal.hide();
})