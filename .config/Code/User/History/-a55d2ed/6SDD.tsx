import Header from "@ui/header";

const Form = () => {
    return (
        <main>
            <form>
                <Header className="pb-2">
                    <Header.title>Add your todo</Header.title>
                </Header>

                <label htmlFor="title">
                    Title
                    <input id="title" type="text" />
                </label>
            </form>
        </main>
    );
};

export default Form;
