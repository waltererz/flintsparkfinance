import ReactDOM from 'react-dom/client';
import { RouterProvider } from 'react-router-dom';
import { ThemeProvider } from '@mui/material/styles';

import router from './router';
import theme from './theme';

// Bootstrap
import './bootstrap';

// Font - Roboto
import '@fontsource/roboto/300.css';
import '@fontsource/roboto/400.css';
import '@fontsource/roboto/500.css';
import '@fontsource/roboto/700.css';

ReactDOM.createRoot(document.getElementById('app')).render(
    <ThemeProvider theme={theme}>
        <RouterProvider router={router} />
    </ThemeProvider>
);