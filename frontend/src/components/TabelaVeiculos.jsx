import { useEffect, useState } from "react";
import axios from "axios";

function TabelaVeiculos() {
    const [veiculos, setVeiculos] = useState([]);

    useEffect(() => {
        axios.get("http://localhost:8000/api/veiculos")
            .then((response) => {
                setVeiculos(response.data.data);
            })
            .catch((error) => {
                console.log("Erro ao buscar veículos:", error);
            });
    }, []);

    return (
        <table border="1">
            <thead>
                <tr>
                    <th>Placa</th>
                    <th>Modelo</th>
                    <th>Cor</th>
                    <th>Status</th>
                </tr>
            </thead>

            <tbody>
                {veiculos.map((veiculo) => (
                    <tr key={veiculo.col_id}>
                        <td>{veiculo.col_placa}</td>
                        <td>{veiculo.modelo_veiculo?.col_nome}</td>
                        <td>{veiculo.cor?.col_nome}</td>
                        <td>{veiculo.status_veiculo?.col_nome}</td>
                    </tr>
                ))}
            </tbody>
        </table>
    );
}

export default TabelaVeiculos;