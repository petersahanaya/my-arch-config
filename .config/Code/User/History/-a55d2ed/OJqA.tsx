import Header from "@ui/header";

const Form = () => {
    return (
        <form>
            <Header>
                <Header.title>Add your todo</Header.title>
            </Header>

            <label htmlFor="title">
                Title
                <input id="title" type="text" />
            </label>
        </form>
    );
};

export default Form;
