import Header from "@ui/header";

const Form = () => {
    return (
        <main>
            <form>
                <Header className="pb-2">
                    <Header.title>Add your todo</Header.title>
                </Header>

                <label className="flex flex-col" htmlFor="title">
                    Title
                    <input
                        id="title"
                        type="text"
                        className="rounded-md border-[1px] border-stone-300 p-1"
                    />
                    <p>Add your todo title</p>
                </label>
            </form>
        </main>
    );
};

export default Form;
