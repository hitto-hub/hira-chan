/** スレッドの情報 */
export type threadEntity = {
    id: string;
    name: string;
    accessCount: number;
    primaryCategoryId: number;
    secondaryCategoryId: number;
    createdAt: string;
};

/** 詳細カテゴリの情報 */
export type threadSecondaryCategoryEntity = {
    id: number;
    thread_primary_category_id: number;
    name: string;
    created_at: string;
    updated_at: string;
    thread_primary_category: {
        id: number;
        name: string;
        created_at: string;
        updated_at: string;
    };
};

/** 大枠カテゴリの情報 */
export type threadPrimaryCategoryEntity = {
    id: number;
    name: string;
    created_at: string;
    updated_at: string;
    thread_secondary_categorys?: {
        id: number;
        thread_primary_category_id: number;
        name: string;
        created_at: string;
        updated_at: string;
    };
};
