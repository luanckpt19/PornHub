import { Component, OnInit } from '@angular/core';
import { ActivatedRoute } from '@angular/router';
import { HttpClient } from '@angular/common/http';

@Component({
  selector: 'app-home',
  templateUrl: './home.component.html',
  styleUrls: ['./home.component.css']
})
export class HomeComponent implements OnInit {

  constructor() { }

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
