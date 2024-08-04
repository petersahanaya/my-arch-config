import Header from "@ui/header";
import TodoList from "../@lists/page";
import MirageClient from "@/tests/ui/mirage";

const Todo = () => {
    return (
        <section>
            <MirageClient />
            <Header className="px-2 pb-3">
                <Header.title>Your todo</Header.title>
            </Header>

            <TodoList />
        </section>
    );
};

export default Todo;
