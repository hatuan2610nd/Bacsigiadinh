package com.mta.th10.bacsigiadinh.tasks;

import java.io.File;
import java.io.FileOutputStream;
import java.io.IOException;
import java.io.InputStream;
import java.io.OutputStream;

import com.mta.th10.bacsigiadinh.MainActivity;
import com.mta.th10.bacsigiadinh.db.MyDB;

import android.app.ProgressDialog;
import android.os.AsyncTask;
import android.util.Log;

public class CopyDatabaseTask extends AsyncTask<MainActivity, Long, Void> {
	private MainActivity context;
	//private AlertDialog dialog;

	private ProgressDialog progress;
	
	@Override
	protected void onPreExecute() {
//		AlertDialog.Builder builder = new AlertDialog.Builder(MainActivity.Current);
//		builder.setMessage("Đang tải...");
//		builder.setTitle("Đang tải dữ liệu");
//		dialog = builder.create();
//		dialog.show();
		
		progress = ProgressDialog.show(MainActivity.Current, "Tải dữ liệu!", "Đang tải...");
		progress.setCancelable(false);
		
		super.onPreExecute();
	}

	@Override
	protected Void doInBackground(MainActivity... params) {
		context = params[0];
		CopyDatabaseIfNotExist();
		return null;
	}

	@Override
	protected void onProgressUpdate(Long... values) {
		//dialog.setMessage("Đang tải: " + values[0] + "%");
		progress.setMessage("Đang tải: " + values[0] + "%");
		super.onProgressUpdate(values);
	}

	@Override
	protected void onPostExecute(Void result) {
		context.OnCreateDatabaseDone();
		//dialog.dismiss();
		progress.dismiss();
		super.onPostExecute(result);
	}

	private void CopyDatabaseIfNotExist() {
		File fileDb = context.getDatabasePath(MyDB.DATABASE_NAME);
		if (fileDb.exists() == false) {
			Log.d("DBController", "Database is not exist! Create a new one!");
			try {
				fileDb.getParentFile().mkdirs();
				if (fileDb.createNewFile()) {
					Log.d("DBController", "Create file success!");
					InputStream is = context.getAssets().open(MyDB.DATABASE_NAME);
					OutputStream os = new FileOutputStream(fileDb);

					byte[] buffer = new byte[1024];
					int length;
					int total = is.available();
					Log.d("total1", ""+total);
					int count = 0;
					int i = 0;
					int n = (total / 1024) / 100;

					while ((length = is.read(buffer)) > 0) {
						count += length;
						os.write(buffer, 0, length);
						i++;
						if (i == n) {
							i = 0;
							publishProgress(Math.round(count*1.0 / total * 100));
						}

					}
					Log.d("total", ""+count);
					publishProgress((long)100);
					os.flush();
					is.close();
					os.close();
					Log.d("DBController", "Copy database file is done!");
				} else {
					Log.d("DBController", "Create file failed!");
				}

			} catch (IOException e) {
				// TODO Auto-generated catch block
				e.printStackTrace();
			}
		} else {
			Log.d("DBController", "Database is already created!");
		}
	}

}
