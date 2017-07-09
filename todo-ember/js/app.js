// window.Todos = Ember.Application.create();
//
// Todos.ApplicationAdapter = DS.LSAdapter.extend({
//   namespace: 'todos-emberjs'
// });
window.Todos = Ember.Application.create();
Todos.ApplicationAdapter = DS.ActiveModelAdapter.extend({
  namespace: '',
  host: 'http://todo.localhost'
});
