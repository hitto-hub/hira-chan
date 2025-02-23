import { routesContext, userContext } from "../../hooks/useContext";
import { Logout } from "../../features/auth/components/Logout";
import { cutText } from "../../utils/format";
import { RoutesEntity, UserEntity } from "../../types";

/**
 * HxS のロゴを表示する
 * ロゴをクリックで https://oithxs.github.io
 *
 * @return {JSX.Element}
 */
const HxSLogo = () => {
    return (
        <a href="https://oithxs.github.io/" className="vw-5">
            <img src="/img/hxs_logo.svg" alt="hxs sns logo" />
        </a>
    );
};

/**
 * 「hira-chan」のロゴを表示する
 * ロゴクリックで ダッシュボードへ移動
 *
 * @return {JSX.Element}
 */
const Title = () => {
    const routes: RoutesEntity = routesContext();

    return (
        <a href={routes.dashboard} className="vw-10">
            <img src="/img/hira-chan.svg" alt="hira-chan logo" />
        </a>
    );
};

/**
 * ユーザ名を表示し，ログイン状態で利用できる様々なリンクをまとめたドロップダウンを表示する
 *
 * @return {JSX.Element}
 */
const AcctCtrDropDown = () => {
    const routes: RoutesEntity = routesContext();
    const user: UserEntity = userContext();

    return (
        <div className="dropdown mx-1">
            <a
                className="btn btn-secondary dropdown-toggle"
                href="#"
                role="button"
                id="dropdownMenuLink"
                data-bs-toggle="dropdown"
                aria-expanded="false"
            >
                {cutText(user.name)}
            </a>
            <ul className="dropdown-menu" aria-labelledby="dropdownMenuLink">
                <li>
                    <p className="dropdown-header">アカウント管理</p>
                </li>
                <li>
                    <a className="dropdown-item" href={routes.myPage}>
                        マイページ
                    </a>
                </li>
                <li>
                    <a className="dropdown-item" href={routes.threadHistory}>
                        閲覧履歴
                    </a>
                </li>
                <li>
                    <a className="dropdown-item" href={routes.profileShow}>
                        プロフィール
                    </a>
                </li>
                <li>
                    <hr className="dropdown-divider" />
                </li>
                <li>
                    <Logout class="dropdown-item" />
                </li>
            </ul>
        </div>
    );
};

/**
 * ログイン・新規登録ページへ移動するボタンを表示する
 *
 * @return {JSX.Element}
 */
const AuthFalse = () => {
    const routes: RoutesEntity = routesContext();

    return (
        <div>
            <a href={routes.login} className="btn btn-outline-dark mx-1">
                ログイン
            </a>
            <a href={routes.register} className="btn btn-secondary mx-1">
                新規登録
            </a>
        </div>
    );
};

/**
 * ヘッダを表示する
 *
 * @return {JSX.Element}
 */
export const Header = () => {
    const user: UserEntity = userContext();
    const acctCtr = user["name"] !== "" ? AcctCtrDropDown() : AuthFalse();

    return (
        <header className="bg-aqua vh-12">
            <div className="flex-between mx-3">
                <div className="flex-center">
                    <HxSLogo />
                    <Title />
                </div>
                <div>{acctCtr}</div>
            </div>
        </header>
    );
};
