import { createBrowserRouter } from "react-router-dom";

import * as Pages from '@pages';

const router = createBrowserRouter([
    {
        path: "/",
        element: <Pages.Home />
    },
]);

export default router;