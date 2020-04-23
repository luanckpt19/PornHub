import { Component, OnInit } from '@angular/core';
import { ActivatedRoute } from '@angular/router';
import { HttpClient } from '@angular/common/http';

@Component({
  selector: 'app-layouts',
  templateUrl: './layouts.component.html',
  styleUrls: ['./layouts.component.css']
})
export class LayoutsComponent implements OnInit {

  constructor(private route: ActivatedRoute,
              private http: HttpClient) { }

  ngOnInit(): void {
    this.loadScript('./assets/plugins/jquery/jquery.min.js');
    this.loadScript('./assets/plugins/jquery-ui/jquery-ui.min.js');
    this.loadScript('./assets/plugins/bootstrap/js/bootstrap.bundle.min.js');
    this.loadScript('./assets/plugins/chart.js/Chart.min.js');
    this.loadScript('./assets/plugins/sparklines/sparkline.js');
    this.loadScript('./assets/plugins/jqvmap/jquery.vmap.min.js');
    this.loadScript('./assets/plugins/jqvmap/maps/jquery.vmap.usa.js');
    this.loadScript('./assets/plugins/jquery-knob/jquery.knob.min.js');
    this.loadScript('./assets/plugins/moment/moment.min.js');
    this.loadScript('./assets/plugins/daterangepicker/daterangepicker.js');
    this.loadScript('./assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js');
    this.loadScript('./assets/plugins/summernote/summernote-bs4.min.js');
    this.loadScript('./assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js');
    this.loadScript('./assets/dist/js/adminlte.js');
    this.loadScript('./assets/dist/js/pages/dashboard.js');
    this.loadScript('./assets/dist/js/demo.js');
    this.loadScript('https://cdn.ckeditor.com/4.10.1/full/ckeditor.js');

    const code = this.route.snapshot.queryParamMap.get('code');
    console.log('code = ' + code);
    // this.router.navigate(['../home'], { relativeTo: this.route });
    this.getTokenInfo();
  }

  getTokenInfo() {
    const codeInfo = this.route.snapshot.queryParamMap.get('code');
    const body = {
    code: codeInfo,
    grant_type: 'authorization_code',
    client_secret : '8e67726d-c44e-49b8-9d8d-c6b21f3f8461',
    client_id : 'smac-vn.com',
    redirect_uri : 'http://smac-vn.com/mantisbt/login_page.php'

   };
    this.http
      .post('https://postid.vnpost.vn/auth/realms/idp/protocol/openid-connect/token', body)
      .subscribe(data => console.log(data));
  }

  public loadScript(url: string) {
    const body = document.body;
    const script = document.createElement('script');
    script.innerHTML = '';
    script.src = url;
    script.async = false;
    script.defer = true;
    body.appendChild(script);
  }

}
