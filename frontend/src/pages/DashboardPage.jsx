import { useNavigate } from 'react-router-dom';
import axios from '../api/axios';

export default function DashboardPage() {
    const navigate = useNavigate();

    async function handleLogout() {
        try {
            await axios.post('/api/logout');
        } finally {
            localStorage.removeItem('token');
            navigate('/login');
        }
    }

    return (
        <div className="min-h-screen bg-gray-100 flex items-center justify-center">
            <div className="bg-white p-8 rounded-lg shadow w-full max-w-md text-center">
                <h1 className="text-2xl font-bold mb-4">Dashboard</h1>
                <p className="text-gray-500 mb-6">Kamu berhasil login!</p>
                <button
                    onClick={handleLogout}
                    className="bg-red-500 text-white px-6 py-2 rounded hover:bg-red-600"
                >
                    Logout
                </button>
            </div>
        </div>
    );
}