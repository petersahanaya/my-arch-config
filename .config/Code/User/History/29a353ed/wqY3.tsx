import { todoType } from "@/schemas/init.schema";
import cn from "@/utils/cn";

type ListProps = {} & Pick<todoType, "title" | "id" | "status">;

const List = ({ id, status, title }: ListProps) => {
    return (
        <li className="flex items-center justify-between text-[.9rem]">
            <button className="flex items-center justify-around gap-3 font-[500] text-stone-600">
                <input type="checkbox" name="Buy jewelery" id="1" />
                <p id={id}>{title}</p>
            </button>
            <span
                className={cn(
                    "w-40 rounded-full p-2 px-7 text-center font-[600] capitalize",
                    statusColor[todo.status]
                )}
            >
                {status}
            </span>
        </li>
    );
};

export default List;
