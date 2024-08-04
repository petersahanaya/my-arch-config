const TodoList = () => {
    return (
        <ul className="flex w-full flex-col gap-3 px-4 pb-4">
            {todos.map((todo) => (
                <List
                    id={todo.id}
                    title={todo.title}
                    status={todo.status}
                    key={todo.id}
                />
            ))}
        </ul>
    );
};

export default TodoList;
