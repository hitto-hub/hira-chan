import { Layout as Thread } from "../../features/threads";
import { Header } from "../Header/index";
import { Footer } from "../Footer/index";

import { Posts } from "../../features/posts";

/**
 * ダッシュボードを表示する
 *
 * @return {JSX.Element}
 */
export const Dashboard = () => {
    return (
        <>
            <Header />
            <div className="container-fluid">
                {/* とりあえず表示 */}
                <Thread />
                <Posts />
            </div>
            <Footer />
        </>
    );
};
