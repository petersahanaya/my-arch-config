import Line from "@ui/line";
import Header from "@ui/header";
import Form from "@/ui/form";
import Link from "next/link";
import TodoList from "./@lists/page";

const Home = () => {
    return (
        <section>
            <Header className="px-2 pb-3">
                <Header.title>Your todo</Header.title>
                <Link
                    href="/todo"
                    className="font-[600] text-stone-600 hover:underline"
                >
                    see all
                </Link>
            </Header>

            <TodoList />

            <Line />

            <Form />
        </section>
    );
};

export default Home;
