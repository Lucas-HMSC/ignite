import styles from './Post.module.css';

export function Post() {
  return (
    <article className={ styles.post }>
      <header>
        <div className={ styles.author }>
          <img 
            className={ styles.avatar }
            src="https://github.com/diego3g.png" 
          />
          <div className={ styles.authorInfo }>
            <strong>Diego Fernandes</strong>
            <span>Web Developer</span>
          </div>
        </div>

        <time title="04 de julho às 20:00h" dateTime="2022-07-04 20:00:00">
          Publicado há 1h
        </time>
      </header>

      <div className={ styles.content }>
        <p>Fala galeraa 👋</p>
        <p>Acabei de subir mais um projeto no meu portifa. É um projeto que fiz no NLW Return, evento da Rocketseat. O nome do projeto é DoctorCare 🚀</p>
        <p><a href="">jane.design/doctorcare</a></p>
        <p>
          <a href="">#novoprojeto</a>{' '}
          <a href="">#nlw</a>{' '}
          <a href="">#rocketsea</a>
        </p>
      </div>
    </article>
  );
}