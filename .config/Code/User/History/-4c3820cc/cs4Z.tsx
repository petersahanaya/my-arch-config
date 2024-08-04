import Header from "@ui/header";
import TodoList from "../@lists/page";

const Todo = () => {
    return (
        <section>
            <Header className="px-2 pb-3">
                <Header.title>Your todo</Header.title>
            </Header>

            <TodoList />
        </section>
    );
};

export default Todo;
