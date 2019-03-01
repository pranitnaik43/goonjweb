import React, { Component } from 'react';
// import Todos from './Todos.js';
// import AddTodo from './AddTodo.js';

class App extends Component {
//   state = {
//     todos:[
//       {id: 1, content: 'Complete the assignment'},
//       {id: 2, content: 'Prepare for the test'}
//     ]
//   }
//   deleteTodo = (id) => {
//     const todosCopy = this.state.todos.filter(todo => {
//       return todo.id !== id
//     })
//     this.setState({
//       todos: todosCopy
//     })
//   }
//   addTodo = (todo) => {
//     todo.id = Math.random()
//     let todoCopy = [...this.state.todos, todo]
//     this.setState({
//       todos: todoCopy
//     })
//   }
  render() {
    return (
        <h1>Hello World</h1>
    //   <div className="App container">
    //   <h1 className="text-primary center">Todo List</h1>
    //     <Todos todos = {this.state.todos} deleteTodo={this.deleteTodo}/>
    //     <AddTodo addTodo={this.addTodo}/>
    //   </div>
    );
  }
}

export default App;
