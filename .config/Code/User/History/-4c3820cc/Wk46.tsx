const Todo = () => {
    return (
        <section>
            <Header className="px-2 pb-3">
                <Header.title>Your todo</Header.title>
                <button className="font-[600] text-stone-600 hover:underline">
                    see all
                </button>
            </Header>

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

            <Line />

            <Form />
        </section>
    );
};

export default Todo;
