import '../css/app.css';
import { createRoot } from 'react-dom/client';

function App() {
    return (
        <div className="min-h-screen bg-gray-100 flex items-center justify-center">
            <div className="bg-white rounded-lg shadow-lg p-8 max-w-md text-center">
                <h1 className="text-3xl font-bold text-gray-800 mb-4">
                    Locadora de Veiculos
                </h1>
                <p className="text-gray-600 mb-6">
                    Laravel 13 + React 18 + Tailwind CSS + Redis
                </p>
                <div className="flex gap-2 justify-center flex-wrap">
                    <span className="px-3 py-1 bg-red-100 text-red-700 rounded-full text-sm font-medium">Laravel</span>
                    <span className="px-3 py-1 bg-blue-100 text-blue-700 rounded-full text-sm font-medium">React</span>
                    <span className="px-3 py-1 bg-cyan-100 text-cyan-700 rounded-full text-sm font-medium">Tailwind</span>
                    <span className="px-3 py-1 bg-green-100 text-green-700 rounded-full text-sm font-medium">Redis</span>
                </div>
                <p className="mt-6 text-sm text-green-600 font-semibold">
                    Setup completo! Pronto para desenvolver.
                </p>
            </div>
        </div>
    );
}

const root = createRoot(document.getElementById('app'));
root.render(<App />);
