import { RepositoryItem } from "./RepositoryItem";

const repository = {
  name: 'unform2',
  description: 'Forms in React',
  link: 'https://github.com/unform/unform'
}

export function RepositoryFunction() {
  return (
    <section className="repository-list">
      <h1>Lista de Repositórios</h1>

      <ul>
        <RepositoryItem repository={ repository } />
      </ul>
    </section>
  );
}