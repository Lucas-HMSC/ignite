import { useEffect, useState } from "react";

import { RepositoryItem } from "./RepositoryItem";

import '../styles/repository.scss';

export function RepositoryFunction() {
  const [repositories, setRepositories] = useState([]);

  useEffect(() => {
    fetch('https://api.github.com/users/Lucas-HMSC/repos')
      .then((response) => response.json())
      .then((data) => setRepositories(data));
  }, []);

  return (
    <section className="repository-list">
      <h1>Lista de Repositórios</h1>

      <ul>
        {
          repositories.map((repository) => {
            return <RepositoryItem key={repository.name} repository={ repository } />
          })
        }
      </ul>
    </section>
  );
}