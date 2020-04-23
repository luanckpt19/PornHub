import { Component, OnInit } from '@angular/core';
import * as ClassicEditor from '@ckeditor/ckeditor5-build-classic';

@Component({
  selector: 'app-create-notify-message',
  templateUrl: './create-notify-message.component.html',
  styleUrls: ['./create-notify-message.component.css']
})

export class CreateNotifyMessageComponent implements OnInit {

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
    this.loadScript('./assets/plugins/datatables/jquery.dataTables.min.js');
    this.loadScript('./assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js');
    this.loadScript('./assets/datatables-responsive/js/dataTables.responsive.min.js');
    this.loadScript('./assets/datatables-responsive/js/responsive.bootstrap4.min.js');

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
