type Todo = {
  id: string;
  title: string;
  body: string;
  createdAt: Date;
};

let my_todo: Todo;

const getTitle = (todo: Todo) => {
  return todo.title;
};
