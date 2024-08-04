type Todo = {
  id: string;
  title: string;
  body: string;
  createdAt: Date;
};

const my_todo = {
  id: crypto.randomUUID(),
  title: "Learn GIT",
  body: "Kinda cool u know ^~^",
  createdAt: new Date(),
} satisfies Todo;

my_todo.
