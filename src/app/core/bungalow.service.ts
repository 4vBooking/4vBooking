import { Injectable } from '@angular/core';
import { HttpClient, HttpHeaders } from '@angular/common/http';

import { Observable, of, throwError } from 'rxjs';
import { catchError, tap, map } from 'rxjs/operators';

import { Bungalow } from '../shared/bungalow';


@Injectable({
  providedIn: 'root'
})


export class BungalowService {
  private bungalowsUrl = 'api/bungalows';
  constructor(private http: HttpClient) { }

  getBungalows(): Observable<Bungalow[]>  {
    return this.http.get<Bungalow[]>(this.bungalowsUrl).pipe(
      tap((data) => console.log(JSON.stringify(data))),
      catchError(this.handleError)
    );
  }

  getMaxBungalowId(): Observable<number> {
    return this.http.get<Bungalow[]>(this.bungalowsUrl).pipe(
      // Get max value from an array
      map((data) =>
        Math.max.apply(
          Math,
          data.map(function (o) {
            return o.id;
          })
        )
      ),
      catchError(this.handleError)
    );
  }
  
  getBungalowById(id: number): Observable<Bungalow> {
    const url = `${this.bungalowsUrl}/${id}`;
    return this.http.get<Bungalow>(url).pipe(
      tap((data) => console.log('getBungalow: ' + JSON.stringify(data))),
      catchError(this.handleError)
    );
  }


  createBungalow(product: Bungalow): Observable<Bungalow> {
    const headers = new HttpHeaders({ 'Content-Type': 'application/json' });
    product.id = 0;
    return this.http
      .post<Bungalow>(this.bungalowsUrl, product, { headers: headers })
      .pipe(
        tap((data) => console.log('createBungalow: ' + JSON.stringify(data))),
        catchError(this.handleError)
      );
  }

  deleteBungalow(id: number): Observable<{}> {
    const headers = new HttpHeaders({ 'Content-Type': 'application/json' });
    const url = `${this.bungalowsUrl}/${id}`;
    return this.http.delete<Bungalow>(url, { headers: headers }).pipe(
      tap((data) => console.log('deleteBungalow: ' + id)),
      catchError(this.handleError)
    );
  }

  updateBungalow(product: Bungalow): Observable<Bungalow> {
    const headers = new HttpHeaders({ 'Content-Type': 'application/json' });
    const url = `${this.bungalowsUrl}/${product.id}`;
    return this.http.put<Bungalow>(url, product, { headers: headers }).pipe(
      tap(() => console.log('updateProduct: ' + product.id)),
      // Return the product on an update
      map(() => product),
      catchError(this.handleError)
    );
  }


  private handleError(err: any) {
    let errorMessage: string;
    if (err.error instanceof ErrorEvent) {
      errorMessage = `An error occurred: ${err.error.message}`;
    } else {
      errorMessage = `Backend returned code ${err.status}: ${err.body.error}`;
    }
    console.error(err);
    return throwError(errorMessage);
  }
}
